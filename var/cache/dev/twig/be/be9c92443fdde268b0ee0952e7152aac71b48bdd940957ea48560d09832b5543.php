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
        $__internal_ed662e8b30ba6e72442fc04dc7f5ce809bd92a5b11369c7c00c166be850a9b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed662e8b30ba6e72442fc04dc7f5ce809bd92a5b11369c7c00c166be850a9b7a->enter($__internal_ed662e8b30ba6e72442fc04dc7f5ce809bd92a5b11369c7c00c166be850a9b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c344908ae1280c4b071d8c76a6fb4434738b0197f7d9330f5b56a3f9b4fb820a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c344908ae1280c4b071d8c76a6fb4434738b0197f7d9330f5b56a3f9b4fb820a->enter($__internal_c344908ae1280c4b071d8c76a6fb4434738b0197f7d9330f5b56a3f9b4fb820a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ed662e8b30ba6e72442fc04dc7f5ce809bd92a5b11369c7c00c166be850a9b7a->leave($__internal_ed662e8b30ba6e72442fc04dc7f5ce809bd92a5b11369c7c00c166be850a9b7a_prof);

        
        $__internal_c344908ae1280c4b071d8c76a6fb4434738b0197f7d9330f5b56a3f9b4fb820a->leave($__internal_c344908ae1280c4b071d8c76a6fb4434738b0197f7d9330f5b56a3f9b4fb820a_prof);

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
