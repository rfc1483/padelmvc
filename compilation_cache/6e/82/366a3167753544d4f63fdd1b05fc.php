<?php

/* stagesManager.html.twig */
class __TwigTemplate_6e82366a3167753544d4f63fdd1b05fc extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<form name='form' id='form' class='form' action='insertStage.php' onsubmit='return validate(this)' method='post'>
    <fieldset>
        <legend>
            <span>Stage</span>
        </legend>
        <input type='hidden' id='id' name='id' value='";
        // line 8
        echo twig_escape_filter($this->env, (isset($context['leagueId']) ? $context['leagueId'] : null), "html");
        echo "' />
        <div>
            <label for='number'>Number</label>
            <input name='number' id='number' type='text' />
        </div>
        <div>
            <label for='startDate'>Start date</label>
            <input name='startDate' id='startDate' type='text' />
        </div>
        <div>
            <label for='finishDate'>Finish date</label>
            <input name='finishDate' id='finishDate' type='text' />
        </div>
        <div>
            <label for='year'>Year</label>
            <input name='year' id='year' type='text' />
        </div>
        <div>
            <label for='status'>Status</label>
            <input name='status' id='status' type='text' />
        </div>
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Insert' type='submit' class='button'/>
    </fieldset>
</form>
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "stagesManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
