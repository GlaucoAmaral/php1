<?php 


$hieraquia = array(
	array(
		//atribuicao chave valor ('=>')
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' =>array(
					//Inicio: Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Fim: Gerente de Vendas
				)
				
			),
			//Fim: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//Inicio: Gerente de Contas a pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//inicio: Supervisor de pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							//Termino: Supervisor de pagamentos
						)
					),
					//Termino: Gerente de Contas a pagar
					//Inicio Gerente de Compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//Inicio Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos',
								'subordinados' => array(
									array(
										'nome_cargo' => 'Funcionario'
									)
								)
							)
							//Termino Supervisor de Suprimentos
						)

					)
					//Termino Gerente de Compras
				)
			)
			//Fim: Diretor Financeiro
		)
	)
);


function exibe($cargos){

	$html = '<ul>';

	foreach($cargos as $cargo){

		$html .='<li>';

		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '</li>';


	}

	$html .='</ul>'; //para concatenar

	return $html;
}

echo exibe($hieraquia);




 ?>