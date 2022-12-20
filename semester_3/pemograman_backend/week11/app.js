const express = require("express");
const router = require("./routes/api.js");

// Declare Express
const app = express();

const PORT = 3000;

app.use(express.json());
app.use(express.urlencoded());

app.use(router);


app.listen(PORT, () => {
    console.log(`Server running in http://localhost:${PORT}`);
});
