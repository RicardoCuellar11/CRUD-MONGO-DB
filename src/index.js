const express = require("express");
const mongoose = require("mongoose");
require("dotenv").config();
const userRoutes = require("./routes/usuarios");
const app = express();
const port = process.env.PORT || 9000;



//middleware
app.use(express.json());
app.use('/api', userRoutes);


// routes 
app.get("/", (req, res) => {
    res.send("Welcome to my API");
});

//mongo db connection

mongoose.connect(process.env.MONGODB).then(()=> console.log("Connected to MongoDb Atlas")).catch((error) => console.error(error));
    


app.listen(port, () => console.log("Server listening on port", port));