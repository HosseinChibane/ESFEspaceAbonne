<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a4fea3e4c55b8c0558d10ee73612e29bdb1e9a9be33f0d6e8b510f0b02b9befc extends Twig_Template
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
        $__internal_8b32f59d76b7ae51e4254d003db59326134424f532129541e1836ec10dba4d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b32f59d76b7ae51e4254d003db59326134424f532129541e1836ec10dba4d97->enter($__internal_8b32f59d76b7ae51e4254d003db59326134424f532129541e1836ec10dba4d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d139bbc486099a93711aa289e3b80e7d8f8d4e5516d8d40cafa41c3dd4e58045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d139bbc486099a93711aa289e3b80e7d8f8d4e5516d8d40cafa41c3dd4e58045->enter($__internal_d139bbc486099a93711aa289e3b80e7d8f8d4e5516d8d40cafa41c3dd4e58045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8b32f59d76b7ae51e4254d003db59326134424f532129541e1836ec10dba4d97->leave($__internal_8b32f59d76b7ae51e4254d003db59326134424f532129541e1836ec10dba4d97_prof);

        
        $__internal_d139bbc486099a93711aa289e3b80e7d8f8d4e5516d8d40cafa41c3dd4e58045->leave($__internal_d139bbc486099a93711aa289e3b80e7d8f8d4e5516d8d40cafa41c3dd4e58045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
