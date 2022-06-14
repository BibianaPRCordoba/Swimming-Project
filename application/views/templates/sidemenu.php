<!-- ========== Left Sidebar Start ========== -->

            <?php $rol = ($this->session->userdata('tipo_user'));

            echo "<script languaje='JavaScript'>
                
                $( document ).ready(function() {
                var roles= '$rol';

                switch(roles) {

                    case 'Padre':

                        break;
                        
                    case 'Maestro':

                        
                    
                        break;

                    case 'Nino':

                    break;
                        
                }
                
            });
                             
            </script>";
            ?>
        
            <div class="left side-menu" id="master" >
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu" >
                        <ul id="todo">
                            <li class="text-muted menu-title" style="color:black;">Menu</li>
                            <li class="has_sub" id="padres">
                                <a href="<?= base_url('index.php/Dashboard/');?>" class="waves-effect waves-light" style="color:black;"><i class="fa fa-bank "></i><span> Dashboard</span> </a>
                            </li>
                            <li class="has_sub" id="padres">
                                <a href="<?= base_url('index.php/Padres/');?>" class="waves-effect waves-light" style="color:black;"><i class="fa fa-bank "></i><span> Padres</span> </a>
                            </li>

                            <li class="has_sub" id="alumnos">
                                <a href="<?= base_url('index.php/Alumnos/');?>" class="waves-effect waves-light" style="color:black;"><i class="fa fa-bank "></i><span> Alumnos</span> </a>
                            </li>

                            <li class="has_sub" id="maestros">
                                <a href="<?= base_url('index.php/Maestros/');?>" class="waves-effect waves-light" style="color:black;"><i class="fa fa-bank "></i><span> Maestros</span> </a>
                            </li>
                            <li class="has_sub" id="padres">
                                <a href="<?= base_url('index.php/Calendario/');?>" class="waves-effect waves-light" style="color:black;"><i class="fa fa-bank "></i><span> Calendario</span> </a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->