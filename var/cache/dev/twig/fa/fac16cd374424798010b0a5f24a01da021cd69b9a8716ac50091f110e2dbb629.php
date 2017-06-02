<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1fbc5e5d021862dc9d3d41270fbc789352e58c2eedbce42a8030d5e6dce96bca extends Twig_Template
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
        $__internal_6bfd905b19809320d55f7332b766277d48eca20e0ec64479f2cb460ebb66c725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfd905b19809320d55f7332b766277d48eca20e0ec64479f2cb460ebb66c725->enter($__internal_6bfd905b19809320d55f7332b766277d48eca20e0ec64479f2cb460ebb66c725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0954ca888cd51f7bab3a8602a89c5ec5df852776b855ce8452b7db87d10aead8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0954ca888cd51f7bab3a8602a89c5ec5df852776b855ce8452b7db87d10aead8->enter($__internal_0954ca888cd51f7bab3a8602a89c5ec5df852776b855ce8452b7db87d10aead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6bfd905b19809320d55f7332b766277d48eca20e0ec64479f2cb460ebb66c725->leave($__internal_6bfd905b19809320d55f7332b766277d48eca20e0ec64479f2cb460ebb66c725_prof);

        
        $__internal_0954ca888cd51f7bab3a8602a89c5ec5df852776b855ce8452b7db87d10aead8->leave($__internal_0954ca888cd51f7bab3a8602a89c5ec5df852776b855ce8452b7db87d10aead8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
