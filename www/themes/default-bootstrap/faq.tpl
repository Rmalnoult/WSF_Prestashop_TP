<div class="panel panel-default">
	<div class="panel-heading">
		<h2>FAQ</h2>
	</div>
</div>

{foreach from=$questions key=question item=answer}
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>Question : {l s="$question"}</a></h3>
			<p>Réponse : {$answer}</p>
		</div>
	</div>
{/foreach}