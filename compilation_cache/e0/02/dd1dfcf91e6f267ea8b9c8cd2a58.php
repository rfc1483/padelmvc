<?php

/* league.html.twig */
class __TwigTemplate_e002dd1dfcf91e6f267ea8b9c8cd2a58 extends Twig_Template
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
        echo "<div id=\"league\">
    <form name=\"form\" id=\"form\" class=\"form\" action=\"league.php\" method=\"post\">
        <fieldset>
            <legend>
                <span>Leagues</span>
            </legend>
            <input type=\"hidden\" name=\"page_mode\" id=\"page_mode\" value=\"find\" />
            <div>
                <label for=\"name\">Name</label>
                <input id=\"name\" name=\"name\" type=\"text\" />
            </div>
            <div>
                <label for=\"year\">Start year</label>
                <input id=\"year\" name=\"year\" type=\"text\" />
            </div>
            <div>
                <label for=\"status\">Status</label>
                <input id=\"status\" name=\"status\" type=\"text\" />
            </div>
        </fieldset>
        <fieldset class=\"submit\">
            <input name=\"submit\" id=\"submit\" value=\"Find\" type=\"submit\" class=\"button\"/>
        </fieldset>
    </form>
    <br />
        ";
        // line 32
        if (($this->getAttribute((isset($context['league']) ? $context['league'] : null), "showTable", array(), "any", false) == true)) {
            // line 33
            echo "    <table cellspacing='0' cellpading='0'>
        <tr class='encabezado'>
            <td class=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "headerClass", array(), "any", false), "html");
            echo "\" onclick=\"leagueSortBy(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "sortName", array(), "any", false), "html");
            echo ")\">
                <a><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "arrowName", array(), "any", false), "html");
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['league']) ? $context['league'] : null), "header", array(), "any", false), "name", array(), "any", false), "html");
            echo "</a>
            </td>
            <td class=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "headerClass", array(), "any", false), "html");
            echo "\" onclick=\"leagueSortBy(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "sortYear", array(), "any", false), "html");
            echo ")\">
                <a><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "arrowYear", array(), "any", false), "html");
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['league']) ? $context['league'] : null), "header", array(), "any", false), "year", array(), "any", false), "html");
            echo "</a>
            </td>
            <td class=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "headerClass", array(), "any", false), "html");
            echo "\" onclick=\"leagueSortBy(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "sortStatus", array(), "any", false), "html");
            echo ")\">
                <a><img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "arrowStatus", array(), "any", false), "html");
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context['league']) ? $context['league'] : null), "header", array(), "any", false), "status", array(), "any", false), "html");
            echo "</a>
            </td>
        </tr>
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['league']) ? $context['league'] : null), "row", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['row']) {
            // line 48
            echo "        <tr onclick = \"document.location='manageLeague.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "id", array(), "any", false), "html");
            echo "';\"> 
            <td>
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "name", array(), "any", false), "html");
            echo "
            </td>
            <td>
            ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "year", array(), "any", false), "html");
            echo "
            </td>
            <td>
            ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "status", array(), "any", false), "html");
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "    </table>
    <br />
    <a href='index.php'>Volver</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "league.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
