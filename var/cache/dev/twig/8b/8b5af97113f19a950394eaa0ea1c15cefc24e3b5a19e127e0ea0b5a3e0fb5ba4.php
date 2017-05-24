<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ed13813ee8cda820daa2a20323204c1c5d708734f4109006a30d69ec28aaeca6 extends Twig_Template
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
        $__internal_91920731fe35b225a1b37a06d5c73cf395e4c48e9135ff05c4d829b723af3b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91920731fe35b225a1b37a06d5c73cf395e4c48e9135ff05c4d829b723af3b35->enter($__internal_91920731fe35b225a1b37a06d5c73cf395e4c48e9135ff05c4d829b723af3b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_509f89cc624c7365d4cca1195542d4ec96137de5c6c3249c7d87691d85801f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509f89cc624c7365d4cca1195542d4ec96137de5c6c3249c7d87691d85801f61->enter($__internal_509f89cc624c7365d4cca1195542d4ec96137de5c6c3249c7d87691d85801f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_91920731fe35b225a1b37a06d5c73cf395e4c48e9135ff05c4d829b723af3b35->leave($__internal_91920731fe35b225a1b37a06d5c73cf395e4c48e9135ff05c4d829b723af3b35_prof);

        
        $__internal_509f89cc624c7365d4cca1195542d4ec96137de5c6c3249c7d87691d85801f61->leave($__internal_509f89cc624c7365d4cca1195542d4ec96137de5c6c3249c7d87691d85801f61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
