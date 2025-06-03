<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Inicio - DocLocator</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <style type="text/css">
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #e6f2ff; }
    header, footer { background-color: #0077cc; color: white; text-align: center; padding: 20px; }
    nav a { margin: 0 15px; color: white; text-decoration: none; font-weight: bold; }
    .logo-container { display: flex; align-items: center; justify-content: center; gap: 15px; }
    .logo-container img { height: 50px; }
    .hero-image {
      width: 100%;
      height: 300px;
      background-image: url('imagen1.jpg');
      background-size: cover;
      background-position: center;
      margin-bottom: 30px;
    }
    .contenido {
      text-align: center;
      padding: 30px;
    }
    .contenido a, .contenido input[type="submit"] {
      display: inline-block;
      margin: 15px;
      padding: 12px 25px;
      background-color: #0077cc;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    .contenido a:hover, .contenido input[type="submit"]:hover {
      background-color: #005fa3;
    }
    form { margin-top: 30px; }
    label { display: block; margin-top: 10px; }
    select { padding: 5px; width: 200px; }
    .logo-footer {
      margin-top: 15px;
    }
    .logo-footer img {
      height: 40px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo-container">
      <img src="imagen2.jpg" alt="Logo de DocLocator" />
      <h1>Bienvenido a DocLocator</h1>
    </div>
    <nav>
      <a href="index.xhtml">Inicio</a>
      <a href="registro.xhtml">Registro</a>
      <a href="buscar.xhtml">Buscar</a>
    </nav>
  </header>

  <div class="hero-image"></div>

  <div class="contenido">
    <h2>Directorio Médico en tu comunidad</h2>
    <p>Encuentra o registra médicos por especialidad y ubicación.</p>
    <a href="registro.xhtml">Registrar Médico</a>
    <a href="registrar_cita.xhtml">Registrar Cita</a> <!-- Nuevo botón agregado -->

    <form action="buscar.xhtml" method="get">
      <label for="municipio">Selecciona tu municipio:</label>
      <select name="municipio" id="municipio">
        <option value="benitojuarez">Benito Juárez</option>
        <option value="solidaridad">Solidaridad</option>
        <option value="otónpblanco">Othón P. Blanco</option>
        <option value="cozumel">Cozumel</option>
        <option value="tulum">Tulum</option>
        <option value="islahu">Isla Mujeres</option>
      </select>

      <label for="especialidad">Selecciona especialidad:</label>
      <select name="especialidad" id="especialidad">
        <option value="medicinageneral">Medicina General</option>
        <option value="pediatria">Pediatría</option>
        <option value="ginecologia">Ginecología</option>
        <option value="cardiologia">Cardiología</option>
        <option value="dermatologia">Dermatología</option>
        <option value="traumatologia">Traumatología</option>
      </select>

      <br /><br />
      <input type="submit" value="Buscar Médico" />
    </form>
  </div>

</body>
</html>

