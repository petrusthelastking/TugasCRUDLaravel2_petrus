const express = require("express");
const mysql = require("mysql2");
const bodyParser = require("body-parser");

const app = express();
app.use(bodyParser.json());

// Koneksi ke MySQL
const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "your_database_name",
});

db.connect((err) => {
    if (err) throw err;
    console.log("MySQL Connected...");
});

// Endpoint untuk menyimpan data
app.post("/signup", (req, res) => {
    const { firstName, email, password } = req.body;
    const sql = "INSERT INTO users (first_name, email, password) VALUES (?, ?, ?)";
    db.query(sql, [firstName, email, password], (err, result) => {
        if (err) throw err;
        res.json({ success: true, message: "User signed up!" });
    });
});

// Jalankan server
app.listen(3001, () => {
    console.log("Server running on http://localhost:3001");
});
