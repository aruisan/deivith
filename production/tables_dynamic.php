<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js">
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InfoFruit!</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"></i> <span>InfoFruit!</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/dei.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>Deivith Becerra</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.html"><i class="fa fa-home"></i> Inicio </a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Agregar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.php">Información Usuario</a></li>
                      <li><a href="form_validation.php">Productos</a></li>
                      <li><a href="formPriv.php">Privilegios</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Visualizar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tableUsers.php"> Usuarios </a></li>
                      <li><a href="tableInfoUsr.php"> Información de Usuarios </a></li>
                      <li><a href="tableProDisp.php"> Productos </a></li>
                      <li><a href="tableEstateProd.php"> Estado de los Productos </a></li>
                      <li><a href="tableInfoPriv.php"> Privilegios </a></li>
                      <li><a href="tableBuy.php"> Compras </a></li>
                      <li><a href="tableMen.php"> Mensajes </a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Modificar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="modInfo.php">Información Usuario</a></li>
                      <li><a href="modProd.php">Productos</a></li>
                      <li><a href="modBuy.php">Compra</a></li>
                    </ul>
                  </li>

              </div>
              <div class="menu_section">
                <h3>Extras</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Paginas Adicionales <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="invoice.html">Información</a></li>
                      <li><a href="profile.html">Perfil</a></li>
                      <li><a href="contacts.html">Contactos</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" a href="../index.php" data-placement="top" title="Salir">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/dei.jpg" alt="">Deivith Becerra
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.html"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Configuración</span>
                      </a>
                    </li>
                    <li><a href="../index.php"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Compras Realizadas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                    include_once 'conex.php';
                    $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                    $hccQuery = "SELECT * FROM public.compra ORDER BY idcompra";
                    $result = pg_query($cnx, $hccQuery);

                    if($result){
                      if(pg_num_rows($result)>0){
                        ?>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id Compra</th>
                          <th>Id del Producto Comprado</th>
                          <th>Nombre Producto</th>
                          <th>Tipo de Producto</th>
                          <th>Estado del Producto</th>
                          <th>Cantidad Disponible del Producto</th>
                          <th>Costo Por Unidad</th>
                          <th>Cantidad Comprada</th>
                          <th>Nùmero de Celular Comprador</th>
                          <th>Nùmero de Cedula Comprador</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($row = pg_fetch_object($result)) {
                        ?>
                        <tr>
                          <td><?php echo $row->idcompra ?></td>
                          <td><?php echo $row->idprod ?></td>
                          <td><?php echo $row->nombreprod ?></td>
                          <td><?php echo $row->tipoprod ?></td>
                          <td><?php echo $row->estado ?></td>
                          <td><?php echo $row->cantdisp ?></td>
                          <td><?php echo $row->costuni ?></td>
                          <td><?php echo $row->cantbuy ?></td>
                          <td><?php echo $row->numced ?></td>
                          <td><?php echo $row->numcel ?></td>
                        </tr>
                        <?php
                      }
                    }
                  }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Información de los Usuarios</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                    include_once 'conex.php';
                    $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                    $hccQuery = "SELECT * FROM public.infousuarios ORDER BY iduser";
                    $result = pg_query($cnx, $hccQuery);

                    if($result){
                      if(pg_num_rows($result)>0){
                        ?>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id Usuario</th>
                          <th>Nombre de Usuario</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Correo</th>
                          <th>Telefono</th>
                          <th>Dirección</th>
                          <th>Número de Cedula</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($row = pg_fetch_object($result)) {
                        ?>
                        <tr>
                          <td><?php echo $row->iduser ?></td>
                          <td><?php echo $row->nombreuser ?></td>
                          <td><?php echo $row->nombre ?></td>
                          <td><?php echo $row->apellido ?></td>
                          <td><?php echo $row->correo ?></td>
                          <td><?php echo $row->telefono ?></td>
                          <td><?php echo $row->direccion ?></td>
                          <td><?php echo $row->cedula ?></td>
                        </tr>
                        <?php
                      }
                    }
                  }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Productos Disponibles</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                    include_once 'conex.php';
                    $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                    $hccQuery2 = "SELECT * FROM public.productos ORDER BY idprod";
                    $result2 = pg_query($cnx, $hccQuery2);

                    if($result2){
                      if(pg_num_rows($result2)>0){
                        ?>
                    <table id="datatable-buttons2" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id Producto</th>
                          <th>Nombre</th>
                          <th>Tipo</th>
                          <th>Estado Actual</th>
                          <th>Cantidad</th>
                          <th>Costo Producto</th>
                          <th>Costo Venta</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($row = pg_fetch_object($result2)) {
                        ?>
                        <tr>
                          <td><?php echo $row->idprod ?></td>
                          <td><?php echo $row->nombre ?></td>
                          <td><?php echo $row->tipo ?></td>
                          <td><?php echo $row->estado ?></td>
                          <td><?php echo $row->cantidad ?></td>
                          <td><?php echo $row->costo ?></td>
                          <td><?php echo $row->venta ?></td>
                        </tr>
                        <?php
                      }
                    }
                  }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Estado de los Productos</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <?php
                      include_once 'conex.php';
                      $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                      $hccQuery3 = "SELECT * FROM public.estado ORDER BY codest";
                      $result3 = pg_query($cnx, $hccQuery3);

                      if($result3){
                        if(pg_num_rows($result3)>0){
                          ?>
                      <table id="datatable-buttons3" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Codigo Estado</th>
                            <th>Nombre</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php while ($row = pg_fetch_object($result3)) {
                          ?>
                          <tr>
                            <td><?php echo $row->codest ?></td>
                            <td><?php echo $row->nombrestado ?></td>
                          </tr>
                          <?php
                        }
                      }
                    }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="clearfix"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Tipo de Productos</h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <?php
                        include_once 'conex.php';
                        $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                        $hccQuery3 = "SELECT * FROM public.tipoprod ORDER BY idtipo";
                        $result3 = pg_query($cnx, $hccQuery3);

                        if($result3){
                          if(pg_num_rows($result3)>0){
                            ?>
                        <table id="datatable-buttons3" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Id Tipo</th>
                              <th>Nombre</th>
                              <th>Estado</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php while ($row = pg_fetch_object($result3)) {
                            ?>
                            <tr>
                              <td><?php echo $row->idtipo ?></td>
                              <td><?php echo $row->nombretipo ?></td>
                              <td><?php echo $row->estado ?></td>

                            </tr>
                            <?php
                          }
                        }
                      }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

              <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Mensajes Recibidos</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <?php
                      include_once 'conex.php';
                      $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                      $hccQuery3 = "SELECT * FROM public.mensajes ORDER BY idmen";
                      $result3 = pg_query($cnx, $hccQuery3);

                      if($result3){
                        if(pg_num_rows($result3)>0){
                          ?>
                      <table id="datatable-buttons3" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Id Mensaje</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Mensaje</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($row = pg_fetch_object($result3)) {
                          ?>
                          <tr>
                            <td><?php echo $row->idmen ?></td>
                            <td><?php echo $row->nombre ?></td>
                            <td><?php echo $row->telefono ?></td>
                            <td><?php echo $row->mensaje ?></td>
                          </tr>
                          <?php
                        }
                      }
                    }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="clearfix"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Información de Privilegios</h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <?php
                        include_once 'conex.php';
                        $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                        $hccQuery4 = "SELECT * FROM public.privilegio ORDER BY privil";
                        $result4 = pg_query($cnx, $hccQuery4);

                        if($result4){
                          if(pg_num_rows($result4)>0){
                            ?>
                        <table id="datatable-priv" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Nombre del Privilegio</th>
                              <th>Número de Privilegio</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php while ($row = pg_fetch_object($result4)) {
                            ?>
                            <tr>
                              <td><?php echo $row->nombre ?></td>
                              <td><?php echo $row->privil ?></td>
                            </tr>
                            <?php
                          }
                        }
                      }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Usuarios</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <?php
                          include_once 'conex.php';
                          $cnx = pg_connect($strCnx) or die ("Error de Conexion. ".pg_last_error());

                          $hccQuery5 = "SELECT * FROM public.usuarios ORDER BY privilegio";
                          $result5 = pg_query($cnx, $hccQuery5);

                          if($result5){
                            if(pg_num_rows($result5)>0){
                              ?>
                          <table id="datatable-users" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Nombre de Usuario</th>
                                <th>Contraseña</th>
                                <th>Privilegio</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php while ($row = pg_fetch_object($result5)) {
                              ?>
                              <tr>
                                <td><?php echo $row->nombreuser ?></td>
                                <td><?php echo $row->contraseña ?></td>
                                <td><?php echo $row->privilegio ?></td>
                              </tr>
                              <?php
                            }
                          }
                        }
                              ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>


          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a href="../index.php">InfoFruit - Deivith Becerra</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });

    $(document).ready(function() {
      var handleDataTableButtons = function() {
        if ($("#datatable-buttons2").length) {
          $("#datatable-buttons2").DataTable({
            dom: "Bfrtip",
            buttons: [
              {
                extend: "copy",
                className: "btn-sm"
              },
              {
                extend: "csv",
                className: "btn-sm"
              },
              {
                extend: "excel",
                className: "btn-sm"
              },
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();

      $('#datatable').dataTable();

      $('#datatable-keytable').DataTable({
        keys: true
      });

      $('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [[ 1, 'asc' ]],
        'columnDefs': [
          { orderable: false, targets: [0] }
        ]
      });
      $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      });

      TableManageButtons.init();
    });

    $(document).ready(function() {
      var handleDataTableButtons = function() {
        if ($("#datatable-buttons3").length) {
          $("#datatable-buttons3").DataTable({
            dom: "Bfrtip",
            buttons: [
              {
                extend: "copy",
                className: "btn-sm"
              },
              {
                extend: "csv",
                className: "btn-sm"
              },
              {
                extend: "excel",
                className: "btn-sm"
              },
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();

      $('#datatable').dataTable();

      $('#datatable-keytable').DataTable({
        keys: true
      });

      $('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [[ 1, 'asc' ]],
        'columnDefs': [
          { orderable: false, targets: [0] }
        ]
      });
      $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      });

      TableManageButtons.init();
    });

    $(document).ready(function() {
      var handleDataTableButtons = function() {
        if ($("#datatable-users").length) {
          $("#datatable-users").DataTable({
            dom: "Bfrtip",
            buttons: [
              {
                extend: "copy",
                className: "btn-sm"
              },
              {
                extend: "csv",
                className: "btn-sm"
              },
              {
                extend: "excel",
                className: "btn-sm"
              },
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();

      $('#datatable').dataTable();

      $('#datatable-keytable').DataTable({
        keys: true
      });

      $('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [[ 1, 'asc' ]],
        'columnDefs': [
          { orderable: false, targets: [0] }
        ]
      });
      $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      });

      TableManageButtons.init();
    });


    </script>

    <!-- /Datatables -->
  </body>
</html>
