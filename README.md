User Story 1

ACCEPTANCE CRITERIA:

- Utente deve potersi registrare/loggare in piattaforma
- Bottone “inserisci articolo” in home solo a utenti loggati
- Articolo composto da:
    - Titolo
    - Sottotitolo
    - Corpo del Testo
    - Immagine di copertina
- Categorie dell'annuncio pre-compilate
- La relazione tra Categoria e Annuncio è  1-a-N
- La relazione tra Utente e Annuncio è 1-a-N
- Ad annuncio inserito visualizzare un messaggio di conferma



login 
html
<div class="box">
    <div class="form">
        <h2>Sign in</h2>
        <div class="inputBox">
        <input type="text" required="required" />
        <span>Username</span>
        <i></i>
        </div>
        <div class="inputBox">
        <input type="password" required="required" />
        <span>Password</span>
        <i></i>
        </div>
        <div class="links">
        <a href="#">Forgot Password</a>
        <a href="#">Signup</a>
        </div>
        <input type="submit" value="Login" />
    </div>
</div>

css
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap%22);
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #23242a;
}
.box {
  position: relative;
  width: 380px;
  height: 420px;
  background: #1c1c1c;
  border-radius: 8px;
  overflow: hidden;
}
.box::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 380px;
  height: 420px;
  background: linear-gradient(0deg, transparent, #ebd2cf, #ebd2cf);
  transform-origin: bottom right;
  animation: animate 6s linear infinite;
}
.box::after {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 380px;
  height: 420px;
  background: linear-gradient(0deg, transparent, #ebd2cf, #ebd2cf);
  transform-origin: bottom right;
  animation: animate 6s linear infinite;
  animation-delay: -3s;
}
@keyframes animate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.form {
  position: absolute;
  inset: 2px;
  border-radius: 8px;
  background-color: #28292d;
  z-index: 10;
  padding: 50px 40px;
  display: flex;
  flex-direction: column;
}
.form h2 {
  color: #ebd2cf;
  font-weight: 500;
  align-items: center;
  letter-spacing: 0.1em;
}
.inputBox {
  position: relative;
  width: 300px;
  margin-top: 35px;
}
.inputBox input {
  position: relative;
  width: 100%;
  padding: 20px 10px 10px;
  background: transparent;
  border: none;
  outline: none;
  color: #23242a;
  font-size: 1em;
  letter-spacing: 0.05em;
  z-index: 10;
}
.inputBox span {
  position: absolute;
  left: 0;
  padding: 20px 0px 10px;
  font-size: 1em;
  color: #8f8f8f;
  pointer-events: none;
  letter-spacing: 0.05em;
  transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span {
  color: #45f3ff;
  transform: translateX(0px) translateY(-34px);
  font-size: 0.75em;
}
.inputBox i {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #ebd2cf;
  border-radius: 4px;
  transition: 0.5s;
  pointer-events: none;
  z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i {
  height: 44px;
}
.links {
  display: flex;
  justify-content: space-between;
}
.links a {
  margin: 10px 0;
  font-size: 0.75em;
  color: #ebd2cf;
  text-decoration: none;
}
.links a:hover,
.links a:nth-child(2) {
  color: #ebd2cf;
}
input[type="submit"] {
  border: 1px solid #ebd2cf;
  outline: none;
  background: transparent;
  color:#fff;
  padding: 11px 25px;
  width: 100px;
  margin-top: 10px;
  border-radius: 4px;
  font-weight: 600;
  cursor: pointer;
  transition: all .3s ease;
}
input[type="submit"]:hover{
background: #ebd2cf;
color: #23242a;
}
input[type="submit"]:active {
  opacity: 0.8;
}
