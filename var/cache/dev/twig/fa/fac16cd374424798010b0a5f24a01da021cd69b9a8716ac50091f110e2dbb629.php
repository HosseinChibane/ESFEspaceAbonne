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
        $__internal_0dcfa7bc9c21c2960abcc2aa6bf86f51697e41cc5039c47b9513e0f8db0edc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcfa7bc9c21c2960abcc2aa6bf86f51697e41cc5039c47b9513e0f8db0edc42->enter($__internal_0dcfa7bc9c21c2960abcc2aa6bf86f51697e41cc5039c47b9513e0f8db0edc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_cbbf4bb2aecaa09ce31be5456a8fa6f0798f6d55e2c179d53ad9e3378a3c7a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbf4bb2aecaa09ce31be5456a8fa6f0798f6d55e2c179d53ad9e3378a3c7a4e->enter($__internal_cbbf4bb2aecaa09ce31be5456a8fa6f0798f6d55e2c179d53ad9e3378a3c7a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0dcfa7bc9c21c2960abcc2aa6bf86f51697e41cc5039c47b9513e0f8db0edc42->leave($__internal_0dcfa7bc9c21c2960abcc2aa6bf86f51697e41cc5039c47b9513e0f8db0edc42_prof);

        
        $__internal_cbbf4bb2aecaa09ce31be5456a8fa6f0798f6d55e2c179d53ad9e3378a3c7a4e->leave($__internal_cbbf4bb2aecaa09ce31be5456a8fa6f0798f6d55e2c179d53ad9e3378a3c7a4e_prof);

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
