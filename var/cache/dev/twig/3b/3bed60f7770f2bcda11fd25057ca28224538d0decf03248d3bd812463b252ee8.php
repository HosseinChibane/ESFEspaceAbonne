<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0a40c7c5e904a0359b32959b1d13aa2cae7d1605ef51d84f69d920e78ff16a6f extends Twig_Template
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
        $__internal_4d39678986ac9527bcf32dee9360aa7bc0946d5b7324b7cc2be1f6b2a79ad1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d39678986ac9527bcf32dee9360aa7bc0946d5b7324b7cc2be1f6b2a79ad1ec->enter($__internal_4d39678986ac9527bcf32dee9360aa7bc0946d5b7324b7cc2be1f6b2a79ad1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8935073ca4fd67092623871cf7e3a4f078bcfb3efcd2741e5985f6233bbab37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8935073ca4fd67092623871cf7e3a4f078bcfb3efcd2741e5985f6233bbab37c->enter($__internal_8935073ca4fd67092623871cf7e3a4f078bcfb3efcd2741e5985f6233bbab37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4d39678986ac9527bcf32dee9360aa7bc0946d5b7324b7cc2be1f6b2a79ad1ec->leave($__internal_4d39678986ac9527bcf32dee9360aa7bc0946d5b7324b7cc2be1f6b2a79ad1ec_prof);

        
        $__internal_8935073ca4fd67092623871cf7e3a4f078bcfb3efcd2741e5985f6233bbab37c->leave($__internal_8935073ca4fd67092623871cf7e3a4f078bcfb3efcd2741e5985f6233bbab37c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
