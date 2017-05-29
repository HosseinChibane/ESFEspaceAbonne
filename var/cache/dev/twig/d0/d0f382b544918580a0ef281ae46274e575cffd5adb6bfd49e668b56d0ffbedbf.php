<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a831c0061d5952deb29fa0b4204b09e53e978c5a929421bad99e327d55e224d1 extends Twig_Template
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
        $__internal_abec861ebe02b6b24b9fca1e5c98ae8e70e0e54d6286668c2b92124a42bd315e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abec861ebe02b6b24b9fca1e5c98ae8e70e0e54d6286668c2b92124a42bd315e->enter($__internal_abec861ebe02b6b24b9fca1e5c98ae8e70e0e54d6286668c2b92124a42bd315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4cdc4faae49eeea0d9447474329584d507bf99878281fd463093ddee4f7f3554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdc4faae49eeea0d9447474329584d507bf99878281fd463093ddee4f7f3554->enter($__internal_4cdc4faae49eeea0d9447474329584d507bf99878281fd463093ddee4f7f3554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_abec861ebe02b6b24b9fca1e5c98ae8e70e0e54d6286668c2b92124a42bd315e->leave($__internal_abec861ebe02b6b24b9fca1e5c98ae8e70e0e54d6286668c2b92124a42bd315e_prof);

        
        $__internal_4cdc4faae49eeea0d9447474329584d507bf99878281fd463093ddee4f7f3554->leave($__internal_4cdc4faae49eeea0d9447474329584d507bf99878281fd463093ddee4f7f3554_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
