<?php

/* divisions.html.twig */
class __TwigTemplate_9c7dce99913d072a8d40efea35e516a4 extends Twig_Template
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
            echo "There are no divisions in this stage at the moment. 
";
        } else {
            // line 6
            echo "<table cellspacing='0' cellpading='0'>
    <tr class='encabezado'>
        <td> Level </td>
    </tr>
    ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['divisions']) ? $context['divisions'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['division']) {
                // line 11
                echo "    <tr onclick = \"document.location='modifyDivision.php?divisionId=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['division']) ? $context['division'] : null), "division_id", array(), "any", false), "html");
                echo "';\"> 
        <td> ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['division']) ? $context['division'] : null), "level", array(), "any", false), "html");
                echo " </td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "</table>
";
        }
        // line 17
        echo "<fieldset class='submit'>
    <form name='form' id='form' class='form' action='divisionsManager.php' method='post'>
        <input type='hidden' id='id' name='id' value='";
        // line 19
        echo twig_escape_filter($this->env, (isset($context['stageId']) ? $context['stageId'] : null), "html");
        echo "' />
        <input name='submit' id='submit' value='Add' type='submit' class='button'/>
    </form>
</fieldset>
<a href='index.php'>Back</a>
";
    }

    public function getTemplateName()
    {
        return "divisions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
