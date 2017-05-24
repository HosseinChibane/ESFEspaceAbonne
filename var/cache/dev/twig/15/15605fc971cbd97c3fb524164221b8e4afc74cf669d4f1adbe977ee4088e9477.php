<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4a3355ac4b3f24358d156aa5dee1c6e835cb1606719cbbcb2e34db83b060e794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_990401e206697efc53857e5c5c7595e122f655261b7058a89d7e0d4cb5ac8c5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990401e206697efc53857e5c5c7595e122f655261b7058a89d7e0d4cb5ac8c5c->enter($__internal_990401e206697efc53857e5c5c7595e122f655261b7058a89d7e0d4cb5ac8c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_990cb9631cdf7b65745ebb370d44a6a9e23a8126fb839a915cb9d9ed4156b937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990cb9631cdf7b65745ebb370d44a6a9e23a8126fb839a915cb9d9ed4156b937->enter($__internal_990cb9631cdf7b65745ebb370d44a6a9e23a8126fb839a915cb9d9ed4156b937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_990401e206697efc53857e5c5c7595e122f655261b7058a89d7e0d4cb5ac8c5c->leave($__internal_990401e206697efc53857e5c5c7595e122f655261b7058a89d7e0d4cb5ac8c5c_prof);

        
        $__internal_990cb9631cdf7b65745ebb370d44a6a9e23a8126fb839a915cb9d9ed4156b937->leave($__internal_990cb9631cdf7b65745ebb370d44a6a9e23a8126fb839a915cb9d9ed4156b937_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
