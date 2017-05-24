<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5049583fd461f577d73e81eb948270922bed5e5ddec993ddaca49c4a135a110e extends Twig_Template
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
        $__internal_d7046f30372d714877172ba27e73ecf3492fe063247829a62144c27ef59e82e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7046f30372d714877172ba27e73ecf3492fe063247829a62144c27ef59e82e2->enter($__internal_d7046f30372d714877172ba27e73ecf3492fe063247829a62144c27ef59e82e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_58f1e59a6b9693c3f0caf62d09f61f0bcfbed5fc51fb3ab1c65bca59ceb133d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f1e59a6b9693c3f0caf62d09f61f0bcfbed5fc51fb3ab1c65bca59ceb133d9->enter($__internal_58f1e59a6b9693c3f0caf62d09f61f0bcfbed5fc51fb3ab1c65bca59ceb133d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d7046f30372d714877172ba27e73ecf3492fe063247829a62144c27ef59e82e2->leave($__internal_d7046f30372d714877172ba27e73ecf3492fe063247829a62144c27ef59e82e2_prof);

        
        $__internal_58f1e59a6b9693c3f0caf62d09f61f0bcfbed5fc51fb3ab1c65bca59ceb133d9->leave($__internal_58f1e59a6b9693c3f0caf62d09f61f0bcfbed5fc51fb3ab1c65bca59ceb133d9_prof);

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
