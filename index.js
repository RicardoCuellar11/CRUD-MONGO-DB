const express = require ("express");
const mongoose = require("mongoose");
require("dotenv").config();
const app = express();
const port = process.env.PORT || 9000;


// routes 
app.get("/", (req, res) => {
    res.send("Welcome to my API");
});

//mongo db connection

mongoose.connect(process.env.MONGODB).then(()=> console.log("Connected to MongoDb Atlas")).catch((error) => console.error(error));
    


app.listen(port, () => console.log("Server listening on port", port));