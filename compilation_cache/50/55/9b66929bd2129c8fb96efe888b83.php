<?php

/* modifyDivision.html.twig */
class __TwigTemplate_50559b66929bd2129c8fb96efe888b83 extends Twig_Template
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
        echo "<form name='form' id='form' class='form' action='updateDivision.php' onsubmit='return validate(this)' method='post'>
    <fieldset>
        <legend>
            <span>Division</span>
        </legend>
        <input type='hidden' id='divisionId' name='divisionId' value='";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['division']) ? $context['division'] : null), "division_id", array(), "any", false), "html");
        echo "' />
        <div>
            <label for='level'>level</label>
            <input name='level' id='level' type='text' value='";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['division']) ? $context['division'] : null), "level", array(), "any", false), "html");
        echo "' />
        </div>
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Save' type='submit' class='button'/>
    </fieldset>
</form>
<br />
<form name='form' id='form' class='form' action='deleteDivision.php' onsubmit='return validate(this)' method='post'>
    <input type='hidden' id='id' name='id' value='";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['division']) ? $context['division'] : null), "division_id", array(), "any", false), "html");
        echo "' />
    <input name='submit' id='submit' value='Delete' type='submit' class='button'/>
</form>
<br />
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "modifyDivision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
