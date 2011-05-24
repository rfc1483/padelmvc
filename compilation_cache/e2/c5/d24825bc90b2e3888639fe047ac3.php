<?php

/* stages.html.twig */
class __TwigTemplate_e2c5d24825bc90b2e3888639fe047ac3 extends Twig_Template
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
        if (((isset($context['empty']) ? $context['empty'] : null) == true)) {
            // line 4
            echo "Id: ";
            echo twig_escape_filter($this->env, (isset($context['leagueId']) ? $context['leagueId'] : null), "html");
            echo "
There are no stages in this league at the moment. 
";
        }
        // line 7
        echo "<fieldset class='submit'>
    <form name='form' id='form' class='form' action='stagesManager.php' method='post'>
        <input type='hidden' id='id' name='id' value='";
        // line 9
        echo twig_escape_filter($this->env, (isset($context['leagueId']) ? $context['leagueId'] : null), "html");
        echo "' />
        <input name='submit' id='submit' value='Add' type='submit' class='button'/>
    </form>
</fieldset>
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "stages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
