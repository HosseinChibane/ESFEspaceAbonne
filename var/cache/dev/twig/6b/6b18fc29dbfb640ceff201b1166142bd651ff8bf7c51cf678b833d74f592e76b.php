<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6716c4dfec09a59d8831e012a34a4cc3f7327e82da36e38416b69db277814ac1 extends Twig_Template
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
        $__internal_ff7ce900c8e1701df082f1bde48610232dfa806f86c06f5f4bbd07b606a543ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7ce900c8e1701df082f1bde48610232dfa806f86c06f5f4bbd07b606a543ca->enter($__internal_ff7ce900c8e1701df082f1bde48610232dfa806f86c06f5f4bbd07b606a543ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_20de262265e4107a9768bafa9d0d520866ba7f7971a88874328d8d681f265d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20de262265e4107a9768bafa9d0d520866ba7f7971a88874328d8d681f265d9c->enter($__internal_20de262265e4107a9768bafa9d0d520866ba7f7971a88874328d8d681f265d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ff7ce900c8e1701df082f1bde48610232dfa806f86c06f5f4bbd07b606a543ca->leave($__internal_ff7ce900c8e1701df082f1bde48610232dfa806f86c06f5f4bbd07b606a543ca_prof);

        
        $__internal_20de262265e4107a9768bafa9d0d520866ba7f7971a88874328d8d681f265d9c->leave($__internal_20de262265e4107a9768bafa9d0d520866ba7f7971a88874328d8d681f265d9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
