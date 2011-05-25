<?php

/* modifyStage.html.twig */
class __TwigTemplate_96f983d0bf94a59c0b7d2c2a1ab023de extends Twig_Template
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
        echo "<form name='form' id='form' class='form' action='updateStage.php' onsubmit='return validate(this)' method='post'>
    <fieldset>
        <legend>
            <span>Stage</span>
        </legend>
        <input type='hidden' id='leagueId' name='leagueId' value='";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "league_league_id", array(), "any", false), "html");
        echo "' />
        <input type='hidden' id='stageId' name='stageId' value='";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "stage_id", array(), "any", false), "html");
        echo "' />
        <div>
            <label for='number'>Number</label>
            <input name='number' id='number' type='text' value='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "number", array(), "any", false), "html");
        echo "' />
        </div>
        <div>
            <label for='startDate'>Start date</label>
            <input name='startDate' id='startDate' type='text' value='";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "start_date", array(), "any", false), "html");
        echo "'/>
        </div>
        <div>
            <label for='finishDate'>Finish date</label>
            <input name='finishDate' id='finishDate' value='";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "finish_date", array(), "any", false), "html");
        echo "' type='text' />
        </div>
        <div>
            <label for='year'>Start year</label>
            <input name='year' id='year' type='text' value='";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "year", array(), "any", false), "html");
        echo "' />
        </div>
        <div>
            <label for='status'>Status</label>
            <input name='status' id='status' type='text' value='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "status", array(), "any", false), "html");
        echo "' />
        </div>
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Save' type='submit' class='button'/>
    </fieldset>
</form>
<br />
<form name='form' id='form' class='form' action='deleteStage.php' onsubmit='return validate(this)' method='post'>
    <input type='hidden' id='id' name='id' value='";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "stage_id", array(), "any", false), "html");
        echo "' />
    <input name='submit' id='submit' value='Delete' type='submit' class='button'/>
</form>
<br />
<br />
<form name='form' id='form' class='form' action='divisions.php' onsubmit='return validate(this)' method='post'>
    <input type='hidden' id='stageId' name='stageId' value='";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "stage_id", array(), "any", false), "html");
        echo "' />
    <input name='submit' id='submit' value='Divisions' type='submit' class='button'/>
</form>
<br />
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "modifyStage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
