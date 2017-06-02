<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2a8fc5f11ec21817fcc4934a89b12a04ea837f2c1e32854ed7ec520319ed7f88 extends Twig_Template
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
        $__internal_d6e404c13901d38f2a3140f53b71a6207eac13e260caac83cddef71734b1a538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e404c13901d38f2a3140f53b71a6207eac13e260caac83cddef71734b1a538->enter($__internal_d6e404c13901d38f2a3140f53b71a6207eac13e260caac83cddef71734b1a538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_1fe6a618b6f2a5b1aab7169c85dd61345f347b967f00956803beb7caeb0021ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe6a618b6f2a5b1aab7169c85dd61345f347b967f00956803beb7caeb0021ff->enter($__internal_1fe6a618b6f2a5b1aab7169c85dd61345f347b967f00956803beb7caeb0021ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d6e404c13901d38f2a3140f53b71a6207eac13e260caac83cddef71734b1a538->leave($__internal_d6e404c13901d38f2a3140f53b71a6207eac13e260caac83cddef71734b1a538_prof);

        
        $__internal_1fe6a618b6f2a5b1aab7169c85dd61345f347b967f00956803beb7caeb0021ff->leave($__internal_1fe6a618b6f2a5b1aab7169c85dd61345f347b967f00956803beb7caeb0021ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
