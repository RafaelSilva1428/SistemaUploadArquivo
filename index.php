<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload de Arquivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" src="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="script.js" type="text/javascript"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Sistema de Upload de arquivos 2.0</h1>
</div>

<div class="container">
  <div class="row">

    <div class="col-sm-4">
		<h3>Que tipos de arquivos posso fazer Upload?</h3>
		<h4>Arquivos dos tipos de imagem e texto.</h4>
		<h4>
			<ul>
				 <li>Imagem (jpg, jpeg, png)</li>
				 <li>Compactado (zip, rar)</li>
				 <li>Txt</li>
				 <li>Pdf</li>
				 <li>Doc</li>
			</ul>
		</h4>
		<h4>Caso seu arquivo não seja desses extensões acima, endicamos que Compacte esse arquivo nos tipos Zip ou Rar.</h4>
    </div>

    <div class="col-sm-4">
      <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
			<div id="image_preview"><img id="previewing" src="noimage.png" /></div>

			<div id="selectImage">
				<label>Selecione o arquivo</label><br/>
				<input type="file" name="file" id="file" class="form-control-file"/>
				<br/>
				<input type="submit" value="Upload" class="submit" class="btn btn-primary" />
			</div>

		</form>

    </div>

	<div class="col-sm-4">
		<h4>Resultado do Upload...</h4>
		<h4 id='loading' style="display:none;"><img src="image/carregando.gif"></h4>
		<div id="message"></div>

    </div>

  </div>
</div>

</body>
</html>
