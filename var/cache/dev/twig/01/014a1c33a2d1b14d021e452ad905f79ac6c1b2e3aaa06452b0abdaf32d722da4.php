<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fb5c719df74c79e40ad770ef37c9784fae6dff1669060f8b424766541bc68f80 extends Twig_Template
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
        $__internal_280774ee2a6d19269c1732fe28ca8c893336ecbbd1448ba58e81c739ee074855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280774ee2a6d19269c1732fe28ca8c893336ecbbd1448ba58e81c739ee074855->enter($__internal_280774ee2a6d19269c1732fe28ca8c893336ecbbd1448ba58e81c739ee074855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e5ff5dc50281724185bef14bb907e1f54d57786695a4130510fb9328663edbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ff5dc50281724185bef14bb907e1f54d57786695a4130510fb9328663edbd7->enter($__internal_e5ff5dc50281724185bef14bb907e1f54d57786695a4130510fb9328663edbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_280774ee2a6d19269c1732fe28ca8c893336ecbbd1448ba58e81c739ee074855->leave($__internal_280774ee2a6d19269c1732fe28ca8c893336ecbbd1448ba58e81c739ee074855_prof);

        
        $__internal_e5ff5dc50281724185bef14bb907e1f54d57786695a4130510fb9328663edbd7->leave($__internal_e5ff5dc50281724185bef14bb907e1f54d57786695a4130510fb9328663edbd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
