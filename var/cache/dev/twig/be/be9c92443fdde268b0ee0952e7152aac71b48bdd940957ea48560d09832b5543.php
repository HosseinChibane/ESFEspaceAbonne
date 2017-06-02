<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6f34015bf166514d5957cf3229b72d8f85cc5f00074a43fc7d4bb1165f5f3e6c extends Twig_Template
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
        $__internal_758c0e2da6623bf51fb09c08b5b22e5cdbae676dbdfe9bc1f82547333f6f824f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758c0e2da6623bf51fb09c08b5b22e5cdbae676dbdfe9bc1f82547333f6f824f->enter($__internal_758c0e2da6623bf51fb09c08b5b22e5cdbae676dbdfe9bc1f82547333f6f824f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a0172fda004c9ac86098f408c516adb618c0f566a6115827b3ab0abb7796d0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0172fda004c9ac86098f408c516adb618c0f566a6115827b3ab0abb7796d0ba->enter($__internal_a0172fda004c9ac86098f408c516adb618c0f566a6115827b3ab0abb7796d0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_758c0e2da6623bf51fb09c08b5b22e5cdbae676dbdfe9bc1f82547333f6f824f->leave($__internal_758c0e2da6623bf51fb09c08b5b22e5cdbae676dbdfe9bc1f82547333f6f824f_prof);

        
        $__internal_a0172fda004c9ac86098f408c516adb618c0f566a6115827b3ab0abb7796d0ba->leave($__internal_a0172fda004c9ac86098f408c516adb618c0f566a6115827b3ab0abb7796d0ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
