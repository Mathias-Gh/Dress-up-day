

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Add Product</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="../bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="../assets/css/demo.css" rel="stylesheet" /> 
    <link href="../assets/css/examples.css" rel="stylesheet" /> 
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>    
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
      
</head>
<body class="add-product">
<div class="wrapper">
    <div class="main">
        <div class="section section-nude">
            <div class="container">
                <h3>Ajout de produit</h3>
                <form>
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <h6>Image du produit</h6>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                                <img src="../assets/img/image_placeholder.jpg" alt="...">
                              </div>
                              <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div>
                              <div>
                                <span class="btn btn-default btn-file"><span class="fileinput-new">Selectionner image</span><span class="fileinput-exists">Changer</span><input type="file" name="..."></span>
                                <a href="#" class="btn btn-simple btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Supprimer</a>
                              </div>
                            </div>
                            
                            <div class="tags">
                                <h6>Tags</h6>
                                <div id="tags">
                                    <input name="tagsinput" class="tagsinput" value="" />      
                                </div>

                                <h6>Catégories</h6>
                                <div id="tags-2">
                                    <select>
                                        <option value="option1">Pulls</option>
                                        <option value="option2">Jeans</option>
                                        <option value="option3">T-shirts</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <h6>Nom <span class="icon-danger">*</span></h6>
                                <input type="text" class="form-control border-input" placeholder="entrez le nom du produit ici...">
                            </div>  
                            <div class="form-group">
                                <h6>Slogan <span class="icon-danger"></span></h6>
                                <input type="text" class="form-control border-input" placeholder="entrez le slogan du produit ici...">
                            </div>  
                            <div class="row price-row">
                                <div class="col-md-6">
                                    <h6>Prix <span class="icon-danger">*</span></h6>
                                    <div class="input-group border-input">
                                        <input type="text" value="" placeholder="entrez le prix" class="form-control border-input">
                                        <span class="input-group-addon"><i class="fa fa-euro"></i></span>
                                    </div>
    
                                </div>
                                <div class="col-md-6">
                                    <h6>Remise</h6>
                                    <div class="input-group border-input">
                                        <input type="text" value="" placeholder="entrez la remise" class="form-control border-input">
                                        <span class="input-group-addon">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Description</h6>
                                <textarea class="form-control textarea-limited border-input" placeholder="Ceci est une zone de texte limitée à 150 caractères." rows="10", data-limit="150" ></textarea>
                                <h5><small><span id="textarea-limited-message" class="pull-right">150 caractères restants</span></small></h5>
                            </div>
                        </div>
                    </div>


                    <div class="row buttons-row">
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-danger btn-block">Annuler</button>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-primary btn-block">Sauvegarder</button>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button class="btn btn-primary btn-fill btn-block">Sauvegarder & Publier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>
</body>

<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="../bootstrap3/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="../assets/js/ct-paper-checkbox.js"></script>
<script src="../assets/js/ct-paper-radio.js"></script>
<script src="../assets/js/bootstrap-select.js"></script>
<script src="../assets/js/bootstrap-datepicker.js"></script>
<script src="../assets/js/jquery.tagsinput.js"></script>

<!--  for fileupload -->
<script src="../assets/js/jasny-bootstrap.min.js"></script>

<script src="../assets/js/ct-paper.js"></script>
    
</html>