<?php  

namespace Hcode\Model;

/*usando as classes Sql e model*/
use \Hcode\DB\Sql;
use \Hcode\Model;




class OrderStatus extends Model {

	const EM_ABERTO = 1;
	const AGUARDANDO_PAGAMENTO = 2;
	const PAGO = 3;
	const ENTREGUE = 4;




}

?>