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
            echo "There are no stages in this league at the moment. 
";
        } else {
            // line 6
            echo "<table cellspacing='0' cellpading='0'>
    <tr class='encabezado'>
        <td> Number </td>
        <td> Start Date </td>
        <td> Finish Date </td>
        <td> Year </td>
        <td> Status </td>
    </tr>
    ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context['stages']) ? $context['stages'] : null));
            foreach ($context['_seq'] as $context['_key'] => $context['stage']) {
                // line 15
                echo "    <tr onclick = \"document.location='modifyStage.php?stageId=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "stage_id", array(), "any", false), "html");
                echo "';\"> 
        <td> ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "number", array(), "any", false), "html");
                echo " </td>
        <td> ";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "start_date", array(), "any", false), "html");
                echo " </td>
        <td> ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "finish_date", array(), "any", false), "html");
                echo " </td>
        <td> ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "year", array(), "any", false), "html");
                echo " </td>
        <td> ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context['stage']) ? $context['stage'] : null), "status", array(), "any", false), "html");
                echo " </td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 23
            echo "</table>
";
        }
        // line 25
        echo "<fieldset class='submit'>
    <form name='form' id='form' class='form' action='stagesManager.php' method='post'>
        <input type='hidden' id='id' name='id' value='";
        // line 27
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
