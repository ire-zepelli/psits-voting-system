<?php
    require_once "includes/db.inc.php"; // <-- update path to your db connection

    // if naka login, e butang ra voter_id diri nya kuwaon nalang to uban information ig query. murag e get nalang ang naa diri instaed of assigning to 1.
    $voter_id = 1;

    // prepare and execute query
    $query = "SELECT name, student_id, email, course, level 
            FROM voter 
            WHERE voter_id = :voter_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":voter_id", $voter_id, PDO::PARAM_INT);
    $stmt->execute();

    // fetch row
    $voter = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($voter) {
        $name = $voter['name'];
        $student_id = $voter['student_id'];
        $email = $voter['email'];
        $course = $voter['course'];
        $level = $voter['level'];
    } 
    else 
    {
        $name = $student_id = $email = $course = $level = "Not found";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f9f7f5]">



<?php include 'header.php'; ?>

<?php
require_once "includes/db.inc.php"; // database connection

// Fetch all positions
$posQuery = "SELECT position_id, title FROM position ORDER BY position_id ASC";
$posStmt = $pdo->query($posQuery);
$positions = $posStmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch all parties
$partyQuery = "SELECT party_id, party_name FROM party ORDER BY party_id ASC";
$partyStmt = $pdo->query($partyQuery);
$parties = $partyStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($positions as $pos): ?>
    <section class="mt-12 px-24 mb-20">
        <!-- Position Title -->
        <h1 class="text-3xl font-extrabold text-[#3c1e3a] mb-8 pl-[50px]">
            <?= htmlspecialchars($pos['title']) ?>
        </h1>

        <div class="flex justify-center gap-8 flex-wrap">
            <?php foreach ($parties as $party): ?>
                <?php
                // Fetch candidate for this party in this position
                $candQuery = "SELECT c.candidate_id, c.name, c.poster, p.party_name
                              FROM candidate c
                              JOIN party p ON c.party_id = p.party_id
                              WHERE c.position_id = :position_id AND c.party_id = :party_id
                              LIMIT 1";
                $candStmt = $pdo->prepare($candQuery);
                $candStmt->execute([
                    ':position_id' => $pos['position_id'],
                    ':party_id' => $party['party_id']
                ]);
                $cand = $candStmt->fetch(PDO::FETCH_ASSOC);
                ?>

                <!-- Candidate Card -->
                <div class="bg-[#3c1e3a] text-white shadow-lg rounded-xl p-6 max-w-sm">
                    <?php if ($cand): ?>
                        <img src="<?= htmlspecialchars($cand['poster']) ?>"
                             alt="<?= htmlspecialchars($cand['name']) ?>"
                             class="mx-auto rounded-lg h-72 object-cover -mt-12">

                        <h2 class="mt-4 text-lg font-bold text-center">
                            <?= htmlspecialchars($cand['name']) ?>
                        </h2>
                    <?php else: ?>
                        <img src="images/psits_candidates/empty_character.png"
                             alt="No candidate"
                             class="mx-auto rounded-lg h-72 object-cover -mt-12">

                        <h2 class="mt-4 text-lg font-bold text-center text-gray-400">
                            No Candidate
                        </h2>
                    <?php endif; ?>

                    <h2 class="mt-4 text-base text-center">
                        <?= htmlspecialchars($party['party_name']) ?>
                    </h2>

                    <?php if ($cand): ?>
                        <button class="mt-4 bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-2 rounded-lg mx-auto block w-[150px]">
                            Vote
                        </button>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endforeach; ?>

<?php include 'footer.php'; ?>


</body>
</html>
