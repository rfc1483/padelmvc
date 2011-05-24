<?php

/* find.html.twig */
class __TwigTemplate_70b0fc71ff3af018b0f776edf181b549 extends Twig_Template
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
    <form name=\"form\" id=\"form\" class=\"form\" action=\"find.php\" method=\"post\">
        <fieldset>
            <legend>
                <span>Busqueda</span>
            </legend>
            <input type=\"hidden\" name=\"page_mode\" id=\"page_mode\" value=\"find\" />
            <div>
                <label for=\"name\">Nombre</label>
                <input id=\"name\" name=\"name\" type=\"text\" />
            </div>
            <div>
                <label for=\"surname\">Apellido</label>
                <input id=\"surname\" name=\"surname\" type=\"text\" />
            </div>
            <div>
                <label for=\"phone\">Telefono</label>
                <input id=\"phone\" name=\"phone\" type=\"text\" />
            </div>
            <div>
                <label for=\"email\">E-mail</label>
                <input id=\"email\" name=\"email\" type=\"text\" />
            </div>
            <div>
                <label for=\"user_name\">Usuario</label>
                <input id=\"user_name\" name=\"user_name\" type=\"text\" />
            </div>
            <div>
                <label for=\"state\">Estado</label>
                <input id=\"state\" name=\"state\" type=\"text\" />
            </div>
            <div>
                <label for=\"paid\">Pago</label>
                <input id=\"paid\" name=\"paid\" type=\"text\" />
            </div>
            <div>
                <label for=\"league\">Liga</label> <br />
                <input id=\"league\" name=\"league\" type=\"text\" />
            </div>
        </fieldset>
        <fieldset class=\"submit\">
            <input name=\"submit\" id=\"submit\" value=\"Buscar\" type=\"submit\" class=\"button\"/>
        </fieldset>
    </form>
    ";
        // line 51
        if (($this->getAttribute((isset($context['find']) ? $context['find'] : null), "showTable", array(), "any", false) == true)) {
            // line 52
            echo "    <table cellspacing='0' cellpading='0'>
        <tr class='encabezado'>
            <td class=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['find']) ? $context['find'] : null), "headerClass", array(), "any", false), "html");
            echo "\" onclick=\"sortBy(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['find']) ? $context['find'] : null), "sortCriteria", array(), "any", false), "html");
            echo ")\">
                <a><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['find']) ? $context['find'] : null), "flecha", array(), "any", false), "html");
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['find']) ? $context['find'] : null), "header", array(), "any", false), "html");
            echo "</a>
            </td>
        </tr>
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['find']) ? $context['find'] : null), "row", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['row']) {
            // line 61
            echo "        <tr onclick = \"document.location='modify.php?id=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "team_id", array(), "any", false), "html");
            echo "';\"> 
            <td>
            ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "name1", array(), "any", false), "html");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "surname1", array(), "any", false), "html");
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "name2", array(), "any", false), "html");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['row']) ? $context['row'] : null), "surname2", array(), "any", false), "html");
            echo " 
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 67
        echo "    </table>
    <br />
    <a href='index.php'>Volver</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "find.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
