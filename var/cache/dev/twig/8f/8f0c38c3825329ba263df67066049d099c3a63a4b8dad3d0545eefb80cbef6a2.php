<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a379409ddc17e52af0ebf06c69b535a17e088c8b33bbb9e37b72402fbf9884ab extends Twig_Template
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
        $__internal_d5faf59a44e9ce8218f1ced5c355a5aef34faebe2116fb947b5ce3d4ba71a398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5faf59a44e9ce8218f1ced5c355a5aef34faebe2116fb947b5ce3d4ba71a398->enter($__internal_d5faf59a44e9ce8218f1ced5c355a5aef34faebe2116fb947b5ce3d4ba71a398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_21b4a83fa675fd6d0881298114bf259c9d5f2e6f7c6b986f04415a98fd4aff20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b4a83fa675fd6d0881298114bf259c9d5f2e6f7c6b986f04415a98fd4aff20->enter($__internal_21b4a83fa675fd6d0881298114bf259c9d5f2e6f7c6b986f04415a98fd4aff20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d5faf59a44e9ce8218f1ced5c355a5aef34faebe2116fb947b5ce3d4ba71a398->leave($__internal_d5faf59a44e9ce8218f1ced5c355a5aef34faebe2116fb947b5ce3d4ba71a398_prof);

        
        $__internal_21b4a83fa675fd6d0881298114bf259c9d5f2e6f7c6b986f04415a98fd4aff20->leave($__internal_21b4a83fa675fd6d0881298114bf259c9d5f2e6f7c6b986f04415a98fd4aff20_prof);

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
