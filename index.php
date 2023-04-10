<?php include 'func.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Бутсрап -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	
	<title>Справочник</title>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<table class="table shadow">
					<thead class="thead-dark">
						<tr>
	      					<th>Должность</th>
	      					<th>Ф.И.О.</th>
	      					<th>Вн. тел.</th>
	      					<th>Моб. тел.</th>
	      					<th>Электронная почта</th>
	      				</tr>
	      			</thead>

	      			<tbody>
	      				<tr>
	      					<td><b>Учредитель</b></td>
	      					<td><b>Новрузов Мардан Нариман оглы</b></td>
	      					<td><b>111</b></td>
	      					<td><b>275-01-01</b></td>
	      					<td><b>novruzov@dvplast.ru</b></td>
	      				</tr>
	      			</tbody>

	      			<tbody>
	      				<tr>
	      					<td>Помощник руководителя</td>
	      					<td>Алексеева Ольга Львовна</td>
	      					<td>101</td>
	      					<td>254-54-90</td>
	      					<td>dvplast@dvplast.ru</td>
	      				</tr>
	      			</tbody>
	      			
	      			<?php

	      				$sql = $link->prepare("SELECT * FROM staff ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>

	      		<?php endforeach;?>

	      			<tbody>
	      				<tr>
	      					<td>Системный администратор</td>
	      					<td>Шарапов Юрий Александрович</td>
	      					<td>000</td>
	      					<td>+7 (991) 067-58-81</td>
	      					<td>admin@dvplast.ru</td>
	      				</tr>
	      			</tbody>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Финансовая служба</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>
	      			<?php

	      				$sql = $link->prepare("SELECT * FROM fin ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      		<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Бухгалтерия</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM accounting ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Коммерческая служба</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM comers ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Производство</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM production ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Склад</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM warehouse ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Строительство</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM construction ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Служба главного энергетика</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM energy ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Прочие службы</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM other ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>

	      			<thead class="thead-dark">
						<tr>
	      					<th>Фадеева 30б</th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      					<th></th>
	      				</tr>
	      			</thead>

	      			<?php

	      				$sql = $link->prepare("SELECT * FROM fadeeva ORDER BY post");
	      				$sql->execute();
	      				$result = $sql->fetchAll();
	      				
	      				foreach ($result as $value):
	      			?>

	      			<tbody>
	      				<tr>
	      					<td><?=$value['post'];?></td>
	      					<td><?=$value['fcs'];?></td>
	      					<td><?=$value['tel'];?></td>
	      					<td><?=$value['mob'];?></td>
	      					<td><?=$value['mail'];?></td>
	      				</tr>
	      			</tbody>
	      			<?php endforeach;?>
	      		</table>
	      	</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>