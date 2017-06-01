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
        $__internal_dc678a9e575c148b5e4e9f89d6af951021976cca98437013aac25b74de000b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc678a9e575c148b5e4e9f89d6af951021976cca98437013aac25b74de000b2b->enter($__internal_dc678a9e575c148b5e4e9f89d6af951021976cca98437013aac25b74de000b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_9e389745836a98ffeb8e9a8f95a611a70029613be7b47bce802cda723b34dc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e389745836a98ffeb8e9a8f95a611a70029613be7b47bce802cda723b34dc21->enter($__internal_9e389745836a98ffeb8e9a8f95a611a70029613be7b47bce802cda723b34dc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_dc678a9e575c148b5e4e9f89d6af951021976cca98437013aac25b74de000b2b->leave($__internal_dc678a9e575c148b5e4e9f89d6af951021976cca98437013aac25b74de000b2b_prof);

        
        $__internal_9e389745836a98ffeb8e9a8f95a611a70029613be7b47bce802cda723b34dc21->leave($__internal_9e389745836a98ffeb8e9a8f95a611a70029613be7b47bce802cda723b34dc21_prof);

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
