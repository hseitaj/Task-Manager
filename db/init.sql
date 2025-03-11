DROP TABLE IF EXISTS tasks;
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tasks (title, description) VALUES
('Enhance Resume Page', 'Design and implement a resume page that displays your resume content in a visually appealing layout.'),
('Improve Index Layout', 'Rearrange the index page with a modern, responsive design using CSS grid or flexbox for a clean interface.'),
('Create UI Template for Task Card', 'Develop a modern, interactive UI template for displaying task cards with animations and responsive design.'),
('Explore Laravel Migration', 'Evaluate migrating the project to Laravel for enhanced functionality, scalability, and maintainability.');
