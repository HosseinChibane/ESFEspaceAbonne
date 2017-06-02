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
        $__internal_52192523302ca113c3f9cb804132d4e9ff01e8a9b5d33e166b93ba3f41e271a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52192523302ca113c3f9cb804132d4e9ff01e8a9b5d33e166b93ba3f41e271a6->enter($__internal_52192523302ca113c3f9cb804132d4e9ff01e8a9b5d33e166b93ba3f41e271a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c9478eca5b81471bbf0c2578b1341d8549791d8a2cb8bc2a594ef7e3f5d4c742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9478eca5b81471bbf0c2578b1341d8549791d8a2cb8bc2a594ef7e3f5d4c742->enter($__internal_c9478eca5b81471bbf0c2578b1341d8549791d8a2cb8bc2a594ef7e3f5d4c742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_52192523302ca113c3f9cb804132d4e9ff01e8a9b5d33e166b93ba3f41e271a6->leave($__internal_52192523302ca113c3f9cb804132d4e9ff01e8a9b5d33e166b93ba3f41e271a6_prof);

        
        $__internal_c9478eca5b81471bbf0c2578b1341d8549791d8a2cb8bc2a594ef7e3f5d4c742->leave($__internal_c9478eca5b81471bbf0c2578b1341d8549791d8a2cb8bc2a594ef7e3f5d4c742_prof);

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
