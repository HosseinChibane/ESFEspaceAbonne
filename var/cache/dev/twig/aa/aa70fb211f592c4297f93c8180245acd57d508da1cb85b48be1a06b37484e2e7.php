<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_31174c26a28e81f167eb4a79437d4b971be01a35db3e343ad534999a3dcd5bb9 extends Twig_Template
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
        $__internal_b243837b1ca2f1e5792b7f2732d95f5e384dc5f3f32a4deac3830cbd92e0cacb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b243837b1ca2f1e5792b7f2732d95f5e384dc5f3f32a4deac3830cbd92e0cacb->enter($__internal_b243837b1ca2f1e5792b7f2732d95f5e384dc5f3f32a4deac3830cbd92e0cacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_60c8e6833c00ccdadb9f034965425409b7d2bda32219390fd11803451e95d1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c8e6833c00ccdadb9f034965425409b7d2bda32219390fd11803451e95d1c7->enter($__internal_60c8e6833c00ccdadb9f034965425409b7d2bda32219390fd11803451e95d1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b243837b1ca2f1e5792b7f2732d95f5e384dc5f3f32a4deac3830cbd92e0cacb->leave($__internal_b243837b1ca2f1e5792b7f2732d95f5e384dc5f3f32a4deac3830cbd92e0cacb_prof);

        
        $__internal_60c8e6833c00ccdadb9f034965425409b7d2bda32219390fd11803451e95d1c7->leave($__internal_60c8e6833c00ccdadb9f034965425409b7d2bda32219390fd11803451e95d1c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
