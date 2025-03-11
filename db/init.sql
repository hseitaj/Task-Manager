-- db/init.sql
-- Create the tasks table if it does not already exist.
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert some sample tasks.
INSERT INTO tasks (title, description) VALUES
('Learn PHP', 'Understand the basics of PHP and build a simple web application.'),
('Set Up MySQL', 'Create a MySQL database and learn how to connect using PHP.');
