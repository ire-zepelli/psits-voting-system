CREATE DATABASE psits_elections;

USE psits_elections;

-- Voter Table
CREATE TABLE Voters (
    voter_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    student_id VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    course VARCHAR(100),
    level VARCHAR(50)
);

-- Party Table
CREATE TABLE Parties (
    party_id INT AUTO_INCREMENT PRIMARY KEY,
    party_name VARCHAR(100) NOT NULL,
    description TEXT,
    party_img VARCHAR(255)
);

INSERT INTO Parties (party_name, description, party_img) VALUES
('E.I. PartyList', 'A party dedicated to improving student life through various initiatives and programs.', 'posters/e.i.poster.jpg'),
('PINS PartyList', 'Focused on community service and fostering a spirit of cooperation among students.', 'path/to/image2.jpg');

-- Position Table
CREATE TABLE Positions (
    position_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL
);

INSERT INTO Positions (title) VALUES
('President'),
('VP-Internal'),
('VP-External'),
('Secretary'),
('Treasurer'),
('Auditor'),
('PIO'),
('Chief of Creatives'),
('Chief of Representatives'),
('Chief of Student Development'),
('Academic Representative'),
('CARES Representative');

-- Candidate Table
CREATE TABLE Candidates (
    candidate_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    position_id INT NOT NULL,
    party_id INT,
    poster VARCHAR(255),
    manifesto TEXT,
    FOREIGN KEY (position_id) REFERENCES Positions(position_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (party_id) REFERENCES Parties(party_id)
        ON DELETE SET NULL ON UPDATE CASCADE
);

-- E.I. PartyList Candidates
INSERT INTO Candidates (name, position_id, party_id, poster, manifesto) VALUES
('Daniel Mapano', 1, 1, 'posters/pres-1.jpg', 'I will lead with transparency and prioritize student welfare.'),
('Argee Paquibot', 2, 1, 'posters/vp-int-1.jpg', 'I will strengthen internal collaboration and student engagement.'),
('Mary Jasmin Ompad', 3, 1, 'posters/vp-ex-1.jpg', 'I will build strong partnerships with external organizations for student benefit.'),
('John Carlo Borgueta', 4, 1, 'posters/sec-1.jpg', 'I will ensure accurate records and smooth communication within our community.'),
('Angel Dejamo', 5, 1, 'posters/tres-1.jpg', 'I will manage finances responsibly and support all student initiatives.'),
('Blaise Colimbo', 6, 1, 'posters/aud-1.jpg', 'I will maintain accountability and transparency in all operations.'),
('Christo Rey Espina', 7, 1, 'posters/pio-1.jpg', 'I will promote our activities and achievements to the wider community.'),
('Jade Mykel Ventic', 8, 1, 'posters/coc-1.jpg', 'I will unleash creative ideas to enrich student life and events.'),
('Jaycee Cabansag', 9, 1, 'posters/cor-1.jpg', 'I will represent student voices effectively and advocate for their needs.'),
('Benedict Avenido', 10, 1, 'posters/cos-1.jpg', 'I will develop programs that foster student growth and learning.'),
('Kyle Peralta', 11, 1, 'posters/acad-rep-1.jpg', 'I will support academic excellence and provide helpful resources.'),
('Allysa Ejares', 12, 1, 'posters/cares-rep-1.jpg', 'I will ensure the welfare of students and promote community service.');


-- PINS PartyList Candidates
INSERT INTO Candidates (name, position_id, party_id, poster, manifesto) VALUES
('Dexter Tampus', 1, 2, 'posters/pres-2.jpg', 'Committed to enhancing student life through dedicated service.'),
('Ayn Lorelle Cavan', 2, 2, 'posters/vp-int-2.jpg', 'Focused on fostering a collaborative and inclusive campus environment.'),
('Bluewyn Bryce Ermac', 3, 2, 'posters/vp-ex-2.jpg', 'Aiming to build strong external relationships for student opportunities.'),
('Imee Camba', 4, 2, 'posters/sec-2.jpg', 'Ensuring efficient communication and organization within the student body.'),
('Chiesca Jeal Saturos', 5, 2, 'posters/tres-2.jpg', 'Dedicated to transparent and effective financial management.'),
('Andrea Torreon', 6, 2, 'posters/aud-2.jpg', 'Committed to accountability and integrity in all student affairs.'),
('John Alfred Dungog', 7, 2, 'posters/pio-2.jpg', 'Passionate about promoting student achievements and events.'),
('Adrian Cortes', 8, 2, 'posters/coc-2.jpg', 'Bringing innovative ideas to enhance student engagement and creativity.'),
('Brad Sarra', 9, 2, 'posters/cor-2.jpg', 'Advocating for student needs and ensuring their voices are heard.'),
('Ma. Rexene Cabahug', 10, 2, 'posters/cos-2.jpg', 'Fostering personal and academic growth through supportive programs.'),
('Edwin Calunsag', 11, 2, 'posters/acad-rep-2.jpg', 'Promoting academic excellence and providing valuable resources.'),
('Loui Naquines', 12, 2, 'posters/cares-rep-2.jpg', 'Dedicated to student welfare and community service initiatives.');


-- Vote Table
CREATE TABLE Votes (
    vote_id INT AUTO_INCREMENT PRIMARY KEY,
    voter_id INT NOT NULL,
    candidate_id INT NOT NULL,
    position_id INT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (voter_id) REFERENCES Voters(voter_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (candidate_id) REFERENCES Candidates(candidate_id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (position_id) REFERENCES Positions(position_id)
        ON DELETE CASCADE ON UPDATE CASCADE
);