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
        $__internal_70dcfa0ef68d29092addff443de3fdd5242fec5ed18116a008dd2d6bdb1e6e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70dcfa0ef68d29092addff443de3fdd5242fec5ed18116a008dd2d6bdb1e6e3a->enter($__internal_70dcfa0ef68d29092addff443de3fdd5242fec5ed18116a008dd2d6bdb1e6e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_41aeee0fd3b58b75946389f709903367d45103c6927f7d76c097885715b705be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41aeee0fd3b58b75946389f709903367d45103c6927f7d76c097885715b705be->enter($__internal_41aeee0fd3b58b75946389f709903367d45103c6927f7d76c097885715b705be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_70dcfa0ef68d29092addff443de3fdd5242fec5ed18116a008dd2d6bdb1e6e3a->leave($__internal_70dcfa0ef68d29092addff443de3fdd5242fec5ed18116a008dd2d6bdb1e6e3a_prof);

        
        $__internal_41aeee0fd3b58b75946389f709903367d45103c6927f7d76c097885715b705be->leave($__internal_41aeee0fd3b58b75946389f709903367d45103c6927f7d76c097885715b705be_prof);

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
