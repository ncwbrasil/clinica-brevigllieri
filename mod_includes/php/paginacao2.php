<?php
$limite = 1;
$stmt->execute();
list($total_linhas) = $stmt->fetch();
//list($total_linhas) = mysql_fetch_array(mysql_query($cnt,$conexao));
$total = $total_linhas/$num_por_pagina;
$prox = $pag + 1;
$ant = $pag - 1;
$ultima_pag = ceil($total / $limite);
$penultima = $ultima_pag - 1;  
$adjacentes = 3;
if ($pag>1)
{
  $paginacao = ' <a class="nav" href="'.$PHP_SELF.''.$variavel.'?pag='.$ant.'">&lsaquo;</a> ';
}
  
if ($ultima_pag <= 10)
{
  for ($i=1; $i< $ultima_pag+1; $i++)
  {
	if ($i == $pag)
	{
	  $paginacao .= ' <a class="atual" href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'"> [ '.$i.' ] </a> ';        
	} else
	{
	  $paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'"> '.$i.' </a> ';  
	}
  }
}
if ($ultima_pag > 10)
{
  if ($pag < 1 + (2 * $adjacentes))
  {
	for ($i=1; $i< 2 + (2 * $adjacentes); $i++)
	{
	  if ($i == $pag)
	  {
		$paginacao .= ' <a class="atual" href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'">[ '.$i.' ]</a> ';        
	  }
	  else 
	  {
		$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'">'.$i.'</a> ';  
	  }
	}
	$paginacao .= ' ... ';
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$penultima.'">'.$penultima.'</a> ';
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$ultima_pag.'">'.$ultima_pag.'</a> ';
  }
  
  elseif($pag > (2 * $adjacentes) && $pag < $ultima_pag - 3)
  {
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag=1">1</a> ';        
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag=2">2</a> ... ';  
	for ($i = $pag-$adjacentes; $i<= $pag + $adjacentes; $i++)
	{
	  if ($i == $pag)
	  {
		$paginacao .= ' <a class="atual" href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'">[ '.$i.' ]</a> ';        
	  }
	  else
	  {
		$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'">'.$i.'</a> ';  
	  }
	}
	$paginacao .= ' ...';
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$penultima.'">'.$penultima.'</a> ';
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$ultima_pag.'">'.$ultima_pag.'</a> ';
  }
  else 
  {
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag=1">1</a> ';        
	$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag=1">2</a> ... ';  
	for ($i = $ultima_pag - (1 + (2 * $adjacentes)); $i <= $ultima_pag; $i++)
	{
	  if ($i == $pag)
	  {
		$paginacao .= ' <a class="atual" href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'">[ '.$i.' ]</a> ';        
	  } else {
		$paginacao .= ' <a href="'.$PHP_SELF.''.$variavel.'?pag='.$i.'">'.$i.'</a> ';  
	  }
	}
  }
}
if ($prox <= $ultima_pag && $ultima_pag > 2)
{
  $paginacao .= ' <a class="nav" href="'.$PHP_SELF.'?pag='.$prox.''.$variavel.'">&rsaquo;</a> ';
}

echo "<div class='paginacao'><center>$paginacao</center></div>";
						
?>