<?php

/* leagues.html.twig */
class __TwigTemplate_3eeccb2acf8efc05b4fa1324d6592cc4 extends Twig_Template
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
        echo "<div id=\"find\">
    <form name=\"form\" id=\"form\" class=\"form\" action=\"leagues.php\" method=\"post\">
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
                <label for=\"surname\">Start year</label>
                <input id=\"year\" name=\"year\" type=\"text\" />
            </div>
            <div>
                <label for=\"phone\">Status</label>
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
        if (($this->getAttribute((isset($context['find']) ? $context['find'] : null), "showTable", array(), "any", false) == true)) {
            // line 33
            echo "    <table cellspacing='0' cellpading='0'>
        <tr class='encabezado'>
            <td class=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "headerClass", array(), "any", false), "html");
            echo "\" onclick=\"sortBy(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "sortCriteria", array(), "any", false), "html");
            echo ")\">
                <a><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "flecha", array(), "any", false), "html");
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['league']) ? $context['league'] : null), "header", array(), "any", false), "html");
            echo "</a>
            </td>
        </tr>
    ";
        }
        // line 40
        echo "
    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['league']) ? $context['league'] : null), "row", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['row']) {
            // line 42
            echo "        <tr onclick = \"document.location='manageLeague.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "id", array(), "any", false), "html");
            echo "';\"> 
            <td>
            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "name", array(), "any", false), "html");
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "    </table>
    <br />
    <a href='index.php'>Volver</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "leagues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
