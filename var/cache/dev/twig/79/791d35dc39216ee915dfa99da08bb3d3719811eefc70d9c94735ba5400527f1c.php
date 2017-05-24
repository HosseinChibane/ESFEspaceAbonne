<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_be36956aa723a3cf5a0163f510c874458ef763acd282e040906180922e968987 extends Twig_Template
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
        $__internal_23efd173b5ba8c7cf45552b85c85444adfa461c859ca5961f74592b5d3a2be53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23efd173b5ba8c7cf45552b85c85444adfa461c859ca5961f74592b5d3a2be53->enter($__internal_23efd173b5ba8c7cf45552b85c85444adfa461c859ca5961f74592b5d3a2be53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b8ac2ee79d83f5360f23ec5457f8717592f5142aa17168370701b03b2fa59cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ac2ee79d83f5360f23ec5457f8717592f5142aa17168370701b03b2fa59cd1->enter($__internal_b8ac2ee79d83f5360f23ec5457f8717592f5142aa17168370701b03b2fa59cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_23efd173b5ba8c7cf45552b85c85444adfa461c859ca5961f74592b5d3a2be53->leave($__internal_23efd173b5ba8c7cf45552b85c85444adfa461c859ca5961f74592b5d3a2be53_prof);

        
        $__internal_b8ac2ee79d83f5360f23ec5457f8717592f5142aa17168370701b03b2fa59cd1->leave($__internal_b8ac2ee79d83f5360f23ec5457f8717592f5142aa17168370701b03b2fa59cd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
