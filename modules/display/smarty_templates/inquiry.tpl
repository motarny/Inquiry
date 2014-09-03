

<div class="questions">

    {section name="loopQuestions" loop=$Questions}
        <div class="questionContainer">
            <div class="query">
                <div class="index">{$smarty.section.loopQuestions.index+1}.</div>
                <div class="querytxt">{$Questions[loopQuestions]->getQuery()}</div>
            	<div class="clear"></div>
            </div>
            <div class="answer">
                {$Questions[loopQuestions]->getHtmlAnswers()}
            </div>
            <div class="clear"></div>
        </div>
    {/section}
</div>

<div class="summary">


</div>



{literal}
    <script lang="javascript">

        $(function() {
        	
        	$("div.answer_option input[type='text'], textarea").click(function(e) {
        		$(this).find('input').focus();
        		e.stopPropagation();
        		// alert('ok');
        		return false;
        		
        	});
        	
            $("div.answer_option input[type='checkbox']").change(function(e) {
                var isChecked = $(this).prop('checked');
                if (isChecked)
                {
                    $(this).parent().find('div.extras').show();
                } else {
                    $(this).parent().find('div.extras').hide();
                }
            });

            $("div.answer_option input[type='radio']").change(function() {
                // wylacz wszystkie extrasy
                var answerContainer = $(this).closest('div.answer');
                answerContainer.find('div.extras').hide();
                var isChecked = $(this).prop('checked');
                if (isChecked)
                {
                    $(this).parent().find('div.extras').show();
                }
            });

        });


    </script>
{/literal}