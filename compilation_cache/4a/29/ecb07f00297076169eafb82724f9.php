<?php

/* manageLeague.html.twig */
class __TwigTemplate_4a29ecb07f00297076169eafb82724f9 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "<script type=\"text/javascript\" src=\"js/ajax.js\"></script>
    ";
        // line 4
        echo $this->renderParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<form name=\"form\" id=\"form\" class=\"form\" action=\"updateLeague.php\" method=\"post\">
    <fieldset>
        <legend>
            <span>Leagues</span>
        </legend>
                <input type='hidden' id='id' name='id' value='";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['leagueData']) ? $context['leagueData'] : null), "id", array(), "any", false), "html");
        echo "' />
        <div>
            <label for=\"name\">Name</label>
            <input id=\"name\" name=\"name\" value='";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['leagueData']) ? $context['leagueData'] : null), "name", array(), "any", false), "html");
        echo "' type=\"text\" />
        </div>
        <div>
            <label for=\"year\">Start year</label>
            <input id=\"year\" name=\"year\" value='";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['leagueData']) ? $context['leagueData'] : null), "year", array(), "any", false), "html");
        echo "' type=\"text\" />
        </div>
        <div>
            <label for=\"status\">Status</label>
            <input id=\"status\" name=\"status\" value='";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['leagueData']) ? $context['leagueData'] : null), "status", array(), "any", false), "html");
        echo "' type=\"text\" />
        </div>
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Guardar' type='submit' class='button'/>
    </fieldset>
</form>
<br />
<form name='form' id='form' class='form' action='deleteLeague.php' onsubmit='return validate(this)' method='post'>
    <input type='hidden' id='id' name='id' value='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['leagueData']) ? $context['leagueData'] : null), "id", array(), "any", false), "html");
        echo "' />
    <input name='submit' id='submit' value='Eliminar' type='submit' class='button'/>
</form>
<br />
<a href='index.php'>Volver</a>
";
    }

    public function getTemplateName()
    {
        return "manageLeague.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
