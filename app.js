const app = require('express')();
const port = process.env.port || 3000;

app.listen(process.env.port || 3000, (req, res) =>{
    console.log(`servidor rodando na porta ${port}`);
    alert('Olá')
});

app.get('/' , (req,res) => {
    res.send(process.env);
})