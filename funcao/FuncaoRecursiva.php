<?php 

$hierarquia = array(

    array(
      'nome_cargo'=>'CEO',
      'subordinados'=>array(
        //inicio Diretor Comercial
        array(
          'nome_cargo'=>'Diretor Comercial',
          'subordinados'=>array(
            //Inicio Gerente de vendas
            array(
              'nome_cargo'=>'Gerrente de vendas'
            )
            //termino Gerente de vendas
          )
        ),
        //termino Diretor COmercial
        
        //Inicio Diretor Financeiro
        array(
          'nome_cargo'=>'Diretor Financeiro',
          'subordinados'=>array(
            //Inicio Gerente de contas a pagar
            array(
               'nome_cargo'=>'Gerente de contas a pagar',
               'subordinados'=>array(
                //inicio supervisor
                  array(
                    'nome_cargo'=>'Supervisor'
                  )

                //termino supervisor
               ) 
                  ),
            //termino Gerente de contas a pagar
           //Inicio Gerente de compras
            array(
              'nome_cargo'=>'Gerente de compras',
              'subordinados'=>array(
                //inicio supervisor de suprimentos
                array(
                  'nome_cargo'=>'Supervisor de Suprimentos'
                )
               //termino supervisor de suprimentows 
              )
           )
           //termino gerente de compras
          )
        )
      )
    )
    );

    function exibe($cargos){

      $html = "<ul>";

        foreach ($cargos as $cargo) {
          
          $html .= "<li>";

            $html .= $cargo['nome_cargo'];

            if(isset($cargo['subordinados']) && count($cargo['subordinados'])>0){

              $html.=exibe($cargo['subordinados']);
            }

          $html .= "</li>";


        }

      
      $html .= "</ul>";


      return $html;

    }

    echo exibe ($hierarquia);

?>