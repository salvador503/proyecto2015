
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pro-Busqueda</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="plantilla/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plantilla/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="plantilla/dist/css/skins/_all-skins.min.css">

   </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Pro-</b>Busqueda</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">

          </div>
        </nav>
      </header>      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Datos masivos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Ficha de adopcion</a></li>
                <li><a href="../../index2.html"><i class="fa fa-circle-o"></i>Partida de nacimiento</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Otros documentos</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i>documento 1</a></li>
                <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Documento 2</a></li>
                <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Documento 2</a></li>
                <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Documento 2</a></li>
              </ul>
            </li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Digitador
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"><form action="http://localhost/codeigniter/index.php/Expediente/insertar" method="post" accept-charset="utf-8" class="" id="">http://localhost/codeigniter/plantilla/bootstrap/css/bootstrap.min.css<p>
        <label for="id_expediente">id expediente: <span class="required">*</span></label>
                <br /><input id="id_expediente" type="text" name="id_expediente" maxlength="3" value=""  />
</p>


<!-- Nombre alias -->
<p>
        <label for="nombre">nombre: <span class="required">*</span></label>
                <br /><input id="nombre" type="text" name="nombre" maxlength="25" value=""  />
</p>

<p>
        <label for="apellido">apellido: <span class="required">*</span></label>
                <br /><input id="apellido" type="text" name="apellido" maxlength="25" value=""  />
</p>

<p>
        <label for="tipo">tipo: <span class="required">*</span></label>
                
                
        <br /><select name="tipo">
<option value="biologico">biologico</option>
<option value="adoptivo">adoptivo</option>
<option value="conocido por">conocido por</option>
</select></p> 


<!-- Datos desaparecido -->


<p>
        <label for="evento">Evento: <span class="required">*</span></label>
                
                
        <br /><select name="evento">
<option value="1">Guinda de Mayo</option>
</select></p>

<p>
        <label for="lugar_de_desaparicion">lugar de desaparicion: <span class="required">*</span></label>
                <br /><input id="lugar_de_desaparicion" type="text" name="lugar_de_desaparicion" maxlength="25" value=""  />
</p>

<p>
        <label for="dia_desaparicion">dia desaparicion: <span class="required">*</span></label>
                <br /><input id="dia_desaparicion" type="text" name="dia_desaparicion" maxlength="2" value=""  />
</p>

<p>
        <label for="mes_desaparicion">mes desaparicion: <span class="required">*</span></label>
                <br /><input id="mes_desaparicion" type="text" name="mes_desaparicion" maxlength="2" value=""  />
</p>

<p>
        <label for="ano_de_desaparicion">a&ntildeo de desaparicion: <span class="required">*</span></label>
                <br /><input id="ano_de_desaparicion" type="text" name="ano_de_desaparicion" maxlength="2" value=""  />
</p>



<!--Desapararecido -->                                                           
                        
<p>
        <label for="id_pais">pais: <span class="required">*</span></label>
                
                
        <br /><select name="id_pais">
<option value="1">El Salvador</option>
</select></p>                                             
                        
<p>
        <label for="sexo">sexo: <span class="required">*</span></label>
                
                
        <br /><select name="sexo">
<option value="M">Masculino</option>
<option value="F">Femenino</option>
</select></p>                                             
                        
<p>
        <label for="foto">foto: <span class="required">*</span></label>
                <br /><input id="foto" type="text" name="foto" maxlength="50" value=""  />
</p>

<p>
        <label for="fecha_de_nacimiento">fecha de nacimiento: <span class="required">*</span></label>
                <br /><input id="fecha_de_nacimiento" type="text" name="fecha_de_nacimiento"  value=""  />
</p>

<p>
        <label for="lugar_de_nacimiento">lugar de nacimiento: <span class="required">*</span></label>
                <br /><input id="lugar_de_nacimiento" type="text" name="lugar_de_nacimiento" maxlength="25" value=""  />
</p>

<p>
        <label for="estado_civil">estado civil: <span class="required">*</span></label>
                
                
        <br /><select name="estado_civil">
<option value="Soltero">Soltero</option>
<option value="Casado">Casado</option>
<option value="Divorciado">Divorciado</option>
<option value="Acompaniado">Acompa&ntildeado</option>
<option value="Viudo">Viudo</option>
</select></p>                                             
                        

<p>
        <label for="domicilio">domicilio</label>
                <br /><input id="domicilio" type="text" name="domicilio" maxlength="50" value=""  />
</p>

<p>
        <label for="caracteristicas_personales">caracteristicas personales: <span class="required">*</span></label>
        <br />
                            
    <textarea name="caracteristicas_personales" cols="80" rows="5" ></textarea></p>


<!-- expediente -->                                           

<!--                         
<p>
        <label for="fecha_apertura">fecha apertura: <span class="required">*</span></label>
                <br /><input id="fecha_apertura" type="text" name="fecha_apertura"  value=""  />
</p>
-->

<p>
        <label for="investigador_designado">investigador designado: <span class="required">*</span></label>
                <br /><input id="investigador_designado" type="text" name="investigador_designado" maxlength="30" value=""  />
</p>

<p>
        <label for="clasificacion_del_caso">clasificacion del caso: <span class="required">*</span></label>
                
                
        <br /><select name="clasificacion_del_caso">
<option value="DSM">Desaparicion Forzada</option>
</select></p>                                             
                                                                  

<p>
        <input type="submit" name="submit" value="Submit"  /></p>

</form>?></form>
              </div><!-- /.box -->
              
            </div><!--/.col (left) -->

          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015 Pro Busqueda</strong> All rights reserved.
      </footer>

     <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plantilla/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="plantilla/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plantilla/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="plantilla/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="plantilla/dist/js/demo.js"></script>
  </body>
</html>
