<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e8cf43b8da64abd12ec99481b86d2ba82864519a959624ca87dcc1fb5415ff0e extends Twig_Template
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
        $__internal_1a82648316299b2eed20c1bd6cc075ab730bd1deea1af74c0e0a91a80bc85295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a82648316299b2eed20c1bd6cc075ab730bd1deea1af74c0e0a91a80bc85295->enter($__internal_1a82648316299b2eed20c1bd6cc075ab730bd1deea1af74c0e0a91a80bc85295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c8ca2689aa3502cb3ab490b1e127b045a71c6f72bc8ca56b58d7bffc6ba8f752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ca2689aa3502cb3ab490b1e127b045a71c6f72bc8ca56b58d7bffc6ba8f752->enter($__internal_c8ca2689aa3502cb3ab490b1e127b045a71c6f72bc8ca56b58d7bffc6ba8f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1a82648316299b2eed20c1bd6cc075ab730bd1deea1af74c0e0a91a80bc85295->leave($__internal_1a82648316299b2eed20c1bd6cc075ab730bd1deea1af74c0e0a91a80bc85295_prof);

        
        $__internal_c8ca2689aa3502cb3ab490b1e127b045a71c6f72bc8ca56b58d7bffc6ba8f752->leave($__internal_c8ca2689aa3502cb3ab490b1e127b045a71c6f72bc8ca56b58d7bffc6ba8f752_prof);

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
