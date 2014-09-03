{section name="loopAnswers" loop=$answers}
    <label>
        <div class="answer_option">
            <input
                    type="checkbox"
                    value="tak"
                    name="question_{$questionObject->getId()}_{$answers[loopAnswers].field}"
                    {if ($answers[loopAnswers].value == $autofill) && ($autofill != '')}checked="true" {/if}
                    />
            {$answers[loopAnswers].description}
            {if $answers[loopAnswers].extras != null}
                <div class="extras">
                    {section name="loopSets" loop=$answers[loopAnswers].extras}
                        {assign var="extraSetIndex" value=$smarty.section.loopSets.index+1}
                        <div class="extrasSet">
                            {assign var="extraSet" value=$answers[loopAnswers].extras[loopSets]}
                            {section name="loopExtras" loop=$extraSet}
                                {assign var="extra" value=$extraSet[loopExtras]}
                                <div class="queryExtra {$extra.type}">
                                    {assign var="extraField" value=$extra.field}
                                    {if $extra.field == ''}{assign var="extraField" value=$extra.query}{/if}
                                    {if $extra.type == 'text'}
                                        <label>{$extra.query}</label>
                                        <input type="text" name="question_{$questionObject->getId()}_{$answers[loopAnswers].field}_{$extraField}">
                                    {/if}
                                    {if $extra.type == 'textarea'}
                                        <label>{$extra.query}</label>
                                        <textarea name="question_{$questionObject->getId()}_{$answers[loopAnswers].field}_{$extraField}"></textarea>
                                    {/if}
                                    {if $extra.type == 'checkbox'}
                                        <label><input type="checkbox" name="question_{$questionObject->getId()}_{$answers[loopAnswers].field}_{$extraField}" value="tak"> {$extra.query}</label>
                                    {/if}
                                </div>
                            {/section}

                        </div>
                    {/section}
                </div>
            {/if}
        </div>
    </label>
{/section}







{literal}
<script language="javascript">



</script>
{/literal}