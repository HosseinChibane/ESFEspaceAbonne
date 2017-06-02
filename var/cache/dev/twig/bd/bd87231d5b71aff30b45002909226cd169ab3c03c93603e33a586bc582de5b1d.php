<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_adaaba6852753e3968e06870b3f11f98f178234da6acab0b41589d54546f0256 extends Twig_Template
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
        $__internal_c3469040a2267154e6e69e529181ed1c6ec3d15de145e7758519d99f8ba4de3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3469040a2267154e6e69e529181ed1c6ec3d15de145e7758519d99f8ba4de3d->enter($__internal_c3469040a2267154e6e69e529181ed1c6ec3d15de145e7758519d99f8ba4de3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_51be532e85c8d5d3e9fe7cd682719f0f57d3a59a23089c5893e380ddac6dca85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51be532e85c8d5d3e9fe7cd682719f0f57d3a59a23089c5893e380ddac6dca85->enter($__internal_51be532e85c8d5d3e9fe7cd682719f0f57d3a59a23089c5893e380ddac6dca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c3469040a2267154e6e69e529181ed1c6ec3d15de145e7758519d99f8ba4de3d->leave($__internal_c3469040a2267154e6e69e529181ed1c6ec3d15de145e7758519d99f8ba4de3d_prof);

        
        $__internal_51be532e85c8d5d3e9fe7cd682719f0f57d3a59a23089c5893e380ddac6dca85->leave($__internal_51be532e85c8d5d3e9fe7cd682719f0f57d3a59a23089c5893e380ddac6dca85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
